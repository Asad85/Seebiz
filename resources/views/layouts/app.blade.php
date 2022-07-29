<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel= "stylesheet"  href="{{asset('css/custom.css')}}" >
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       
    <body>
      
{{--         
        @Include('inc.nav')   --}}
        
        <!-- Button trigger modal -->

        


         <!-------------------------------------------- ADD Data Modal -------------------------------------------------->

  
<div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   
    <div class="modal-dialog" role="document">
        
      <div class="modal-content">
       
        <div class="modal-header">

            

            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <br><br><br>
                <hr>
        </div>
       
    <form id="addform" method="POST">
        {{-- @csrf --}}

        {{csrf_field()}}
        <div class="modal-body">
        
            <div class="form-group">
                <label for="exampleInputEmail1"> First Name</label>
                <input type="text" name= "fname" class="form-control"  placeholder="First Name">
                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Last Name</label>
                <input type="text" name= "lname" class="form-control"  placeholder="Last Name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"> Course</label>
                <input type="text" name= "course" class="form-control"  placeholder="Add Course">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"> Section </label>
                <input type="text" name= "section" class="form-control"  placeholder=" Add Section">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"  id="storeForm"> Add New User </button>
               
            </div>
            </div>
    </form>

        </div>
      </div>
    </div>

 <!-------------------------------------------- Update Data Modal -------------------------------------------------->

    
<div class="modal fade studenteditmodal "  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
                            
        <div class="modal-header">

             Laravel CRUD with Ajax

            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <br><br><br>
                <hr>
        </div>
       
    <form id="editform" method="POST">

        {{csrf_field()}}
        <div class="modal-body">
        
            <input type="hidden"  name="id" id="idForUpdate">
            <div class="form-group">
                <label for="exampleInputEmail1"> First Name</label>
                <input type="text" name= "fname" class="form-control " id="fname" placeholder="First Name">
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Last Name</label>
                <input type="text" name= "lname" class="form-control " id="lname" placeholder="Last Name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"> Course</label>
                <input type="text" name= "course" class="form-control" id="course" placeholder="Add Course">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"> Section </label>
                <input type="text" name= "section" class="form-control" id="section" placeholder=" Add Section">
            </div>
            
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                        {{-- Below button id is connected to the ajax code--}}
                        <button update-id="" type="button" class="btn btn-primary updatebtn"  > Update Student Data </button>
                       
                    </div>
            </div>
    </form>

        </div>
      </div>
    </div>

      <!-------------------------------------------- ADD Data Modal -------------------------------------------------->
    <div class="container">
        <div class="jumbotron">
            <div style="text-align:center"><h3>Laravel CRUD with Ajax</h3></div>  
            <br><br>
            
            <div class="row">
              
                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                  Add Student Data
                </button>
               
                <table class="table table-striped table-dark">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Course</th>
                        <th scope="col">Section</th>
                      </tr>
                    </thead>
                   
                    <tbody>
                      @foreach ($students as $student)
                        <tr>
                            <td> {{$student->id}}     </td>
                            <td> {{$student->fname}}  </td>
                            <td> {{$student->lname}}  </td>
                            <td> {{$student->course}} </td>
                            <td> {{$student->section}}</td>
                            <td>
                                <button data-id="{{$student->id}}" class="btn btn-success editbtnid " > Edit </button>
                                
    
                                <button data-id="{{$student->id}}" class="deleteRecord btn btn-danger"  >Delete </button>
                               
                            </td>
                        </tr>
                     
                      @endforeach                        

                    </tbody>
                  </table>
           
            </div>
            <br><br>
        </div>
    </div>   
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>                         
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
    



 <!-------------------------------------------- Add Ajax Function -------------------------------------------------->

 <script>
    $(document).ready(function(){
    
        $('#storeForm').on('click', function(e){
            e.preventDefault();

        $.ajax({
                type:"POST",
                url:"/",
                data: $('#addform').serialize(),
                success: function(response){
                    console.log(response)
                    $('#studentaddmodal').modal('hide')
                    alert("Data Save");
                },
                error:function(error){
                    console.log(error)
                    alert("data not saved")
                }
            
                });

        });
    });

</script>

 <!-------End of Add AJAX-------------------------------------------->



    <!-------------------------------------------- edit Ajax Function -------------------------------------------------->

    {{-- Facing Error only first edit button in clickable other not working for that use classes instead of id --}}

    <script>
        $(document).ready(function(){

            $('.editbtnid').on('click', function(){
            console.log($(this).attr('data-id')+"/edit");

            $.ajax({
                        type:"GET",
                        url: "/edit/"+$(this).attr('data-id'),
                        success: function(response){
                            var data  = response.data
                            console.log(response)
                            
                            $('#idForUpdate').val(data.id);
                            $('#fname').val(data.fname);
                            $('#lname').val(data.lname);
                            $('#course').val(data.course);
                            $('#section').val(data.section);
                            $('.studenteditmodal').modal('show')

                            
                        },
                        error:function(error){
                            console.log(error)
                            
                        }
                    
                        });
        
                });     

         
            });
     
    </script>
     <!--------End Of Edit AJAX----------------------------------------->
    
    

//  <!---------------------------------------- update Ajax Function -------------------------------------------------------->


<script>
    $(document).ready(function(){

        $('.updatebtn').on('click', function(e){
            e.preventDefault();

                
        $.ajax({

                        type:"POST",
                        url:"/update/"+ $('#idForUpdate').val(),
                        data: $('#editform').serialize(),
                        dataType: "json",
                        success: function(response){
                           
                            if(response.status){
                        
                                $('.studenteditmodal').modal('hide')
                                window.location.reload();
                            } 
                        
                        }
                        
                    });

        });

  


        $(".deleteRecord").click(function(){
                    var id = $(this).data("id");
                    console.log(id);
                    var token = $("meta[name='csrf-token']").attr("content");
                    console.log($("meta[name='csrf-token']").attr("content"));
                   $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    });
                    $.ajax(
                    {
                        url: "delete/"+id,
                        type: 'post',
                        data: {
                            "id": id,
                            "_token": token,
                        },
                        success: function (response){
                            if(response.status){
                               alert(response.message);  
                              window.location.reload();

                          }                  
                       }
                    });

            });
    });
   
</script>
   
    <!------------END of Update Ajax ----------------------------------->



{{-- <script type="text/javascript">
    $('.editbtnid').on('click', function() {
   
       var vid = $( ".studenteditmodal" ).val();
          //var id=$(this).data('id');
   
           $.ajax({
                 url: '/{id}',
                 type: "Get",
                 dataType: 'json',//this will expect a json response
                 data:{id:$(".studenteditmodal").val()}, 
                  success: function(response){ 
                       $("#id").val(response.id); 
                       $("#fname").val(response.fname);
                       $("#lname").val(response.lname); 
   
           }
               });
       });
   </script> --}}


    
            </div>
        </div>
    </body>
</html>
