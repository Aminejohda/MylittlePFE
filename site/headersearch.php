<style type="text/css">

 ul li:hover {
  background: #eaeaea;
}
#country_list_id {
  width: 300px;
  border: 1px solid #eaeaea;
  position: absolute;
  z-index: 9;
  background: white;
  list-style: none;
  display: none;
  cursor: pointer;
}
#country_list_id2 {
  width: 379px;
  border: 1px solid #eaeaea;
  position: absolute;
  z-index: 9;
  background: white;
  list-style: none;
  display: none;
}
</style>
<div class="header">
			<div class="headere" style="display: none;background : rgba(0, 0, 0, 0.5);width: 1360px;height: 150px; padding-top: 10px">
<div id="nave">
  <ul>
  <form method="post" action="liste_annonce.php">
        <input type="text"  name="act" placeholder="Activité" id="country_id2" onkeyup="autocomplet2()" autocomplete="off" style="
         width: 381px;
    height: 30px; 
    font: 19px Arial;
    color: black; margin-right: 50px;margin-left: 150px; background: white url(public/images/loupes.png);background-size: 20px 20px; background-position: 10px;
    background-repeat: no-repeat; padding-left: 40px;" required >  
   <input type="text" style="  width: 381px;
    height: 30px; 
    font: 19px Arial;
    color: black;
    margin-right: 50px; background: white url(public/images/gps.png)  ; background-size: 20px 20px; background-position: 10px;
    background-repeat: no-repeat; padding-left: 40px;" name="ville" placeholder="Entrer votre ville" id="txtautocomplete2" required>
    
     <ul id="country_list_id2" style="
    margin-top: 0px;
    margin-left: 150px;display: none; cursor: pointer;"></ul><input type="submit" style="width:100px;"></input>
    <input type="hidden" id="lat2" name="lat" required />
<input type="hidden" id="long2" name="long" required />
<div id="slider" style="margin-left : 400px">
  <input class="bar" type="range" id="rangeinput" value="10" onchange="rangevalue.value=value.concat(' KM');"/>
  <span class="highlight"></span>
  <output id="rangevalue">10 KM</output>
  <input type="hidden" id="demo" name="distance" value="10">
  <script>
var p = document.getElementById("rangeinput"),
    res = document.getElementById("demo");
p.addEventListener("input", function() {
    res.value = p.value;
}, false); 
</script>

</div>
    
 </form>
    </ul>
</div>
</div>
			</div>