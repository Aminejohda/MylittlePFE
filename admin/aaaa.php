  <script src="https://code.jquery.com/jquery-2.2.3.min.js
  "></script> <style type="text/css">
  .hide{
    
    display:none;
}</style>
  <form id="form1" runat="server">
     <input type='button' id='remove' value='remove' class='hide'/>
        <input type='file' id="imgInp" /><br>
        <img id="blah" src="public/img/photo/512.png" alt="your image" />
    </form>
    <script>
        $('#blah').hide();
$('#remove').hide();  
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp").change(function(){
        if( $('#imgInp').val()!=""){
            
            $('#remove').show();
            $('#blah').show('slow');
      }
        else{ $('#remove').hide();$('#blah').hide('slow');}
        readURL(this);
    });

  
    $('#remove').click(function(){
          $('#imgInp').val('');
          $(this).hide();
          $('#blah').hide('slow');
 $('#blah').attr('src','http://upload.wikimedia.org/wikipedia/commons/thumb/4/40/No_pub.svg/150px-No_pub.svg.png');
});
    </script>