<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<script>
// Do this instead
setTimeout(function() {
  console.log('date');
  //  use as simple as

  const d = new Date();
d.getDate();
var y=new Date();
if(x=30){
    $.ajax({
    url:"exammail.php",
    type: "POST",
    data: {y:y},
    success: function(data, textStatus, jqXHR) {
        alert(data);
    },
    error: function(jqXHR, textStatus, errorThrown) {
        alert('Error occurred!');

    }

}); 
}
}, 500);
</script>