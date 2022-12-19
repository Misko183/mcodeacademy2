<?php

session_start();

include('../scripts/config.php');

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
    header('location:../login.php');
 };

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCodeAcademy • Admin Panel | home</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.5.2/metisMenu.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/3.3.7/css/sb-admin-2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/416491/timeline.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="template/footer/footer.css">


    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.5.2/metisMenu.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.1/raphael.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/3.3.7/js/sb-admin-2.js"></script>
    <script src="https://cdn.knightlab.com/libs/timeline3/latest/js/timeline.js"></script>

    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Lista-Productos-Canito.css">
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/js/script.js"></script>


</head>

<body>

    <div id="wrapper">

        <!-- nav -->
        <?php include 'template/nav/nav.php' ?>

        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2 style="width: 343px;">List tried</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Trieda</th>
                                    <th>Predmet</th>
                                    <th>Akcia</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
					                      $qry = $conn->query("SELECT f.*,u.name from class f left join users u  on f.users_id = u.id order by u.name asc ");
					                      $i = 1;
					                      if($qry->num_rows >0){
					                      	while($row= $qry->fetch_assoc()){
					                      	?>
                                <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['subject'] ?></td>
                                    <td>
                                        
                                            <button class="btn btn-sm btn-outline-primary edit_class"
                                                data-id="<?php echo $row['id']?>" type="button"><i
                                                    class="fa fa-edit"></i> Upraviť</button>
                                            <button class="btn btn-sm btn-outline-danger remove_class"
                                                data-id="<?php echo $row['id']?>" type="button"><i
                                                    class="fa fa-trash"></i> Vymazať</button>
                                       
                                    </td>
                                </tr>
                                <?php
					                        }
					                        }
					                        ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>




        <?php include 'template/footer/footer.php' ?>

        <!-- footer -->

        <script>
	$(document).ready(function(){
		$('#table').DataTable();
		$('#new_class').click(function(){
			$('#msg').html('')
			$('#manage_class .modal-title').html('Pridať novú triedu')
			$('#manage_class #class-frm').get(0).reset()
			$('#manage_class').modal('show')
		})
		$('.edit_class').click(function(){
			var id = $(this).attr('data-id')
			$.ajax({
				url:'scripts/get_class.php?id='+id,
				error:err=>console.log(err),
				success:function(resp){
					if(typeof resp != undefined){
						resp = JSON.parse(resp)
						$('[name="id"]').val(resp.id)
						$('[name="uid"]').val(resp.uid)
						$('[name="name"]').val(resp.name)
						$('[name="subject"]').val(resp.subject)
						$('[name="username"]').val(resp.username)
						$('[name="password"]').val(resp.password)
						$('#manage_class .modal-title').html('Upraviť triedu')
						$('#manage_class').modal('show')

					}
				}
			})

		})
		$('.remove_class').click(function(){
			var id = $(this).attr('data-id')
			var conf = confirm('Are you sure to delete this data.');
			if(conf == true){
				$.ajax({
				url:'./delete_class.php?id='+id,
				error:err=>console.log(err),
				success:function(resp){
					if(resp == true)
						location.reload()
				}
			})
			}
		})
		$('#class-frm').submit(function(e){
			e.preventDefault();
			$('#class-frm [name="submit"]').attr('disabled',true)
			$('#class-frm [name="submit"]').html('Saving...')
			$('#msg').html('')

			$.ajax({
				url:'./save_class.php',
				method:'POST',
				data:$(this).serialize(),
				error:err=>{
					console.log(err)
					alert('An error occured')
					$('#class-frm [name="submit"]').removeAttr('disabled')
					$('#class-frm [name="submit"]').html('Save')
				},
				success:function(resp){
					if(typeof resp != undefined){
						resp = JSON.parse(resp)
						if(resp.status == 1){
							alert('Data successfully saved');
							location.reload()
						}else{
						$('#msg').html('<div class="alert alert-danger">'+resp.msg+'</div>')

						}
					}
				}
			})
		})
	})
</script>


</body>

</html>