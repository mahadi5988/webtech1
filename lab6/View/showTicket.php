<!DOCTYPE html>
<html>
<style>
  table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #D6EEEE;

}
tr:hover {background-color: #C91A1A;}
      </style>


<style type="text/css"> 
    
    *{
        margin:10;
        padding:10;

    }
    body{
     
        background-image:url(ticket.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        backgroud-position: center;
        font-family:sans-serif;
        margin-top:150px;
    }
    .back-btn{
        background-color:#C91A1A;;
        display:block;
        margin:20px 0px 0px 20px;
        position:fixed;
        left:10px;
        top: 850px;
        text-align:center;
        border-radius:12px;
        border: 2px solid #366473;
        padding: 14px 110px;
        outline: none;
        color:white;
        cursor:pointer;
        transition:0.25px;
        font-weight: 600;
        font-size:20px;
    }
     

        </style>

<body>


<h1 style='text-align:center ; color: #17c5a7;font-size:300% ;font-family: verdana;'  >Search By Destination</h1>


<form action=""> 
  
 <h2 style='text-align:center;font-family: verdana;'>Search <input onkeyup="showTicket(this.value)"></input></h2> 
</form>
<br>
<div id="txtHint" style='text-align:center;font-size:120% ;font-family: verdana;'>Ticket info will be listed here...</div>

<script >
function showTicket(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML = this.responseText;
  }
  xhttp.open("GET", "getticket.php?q="+str);
  xhttp.send();
}

</script>
<form action="welcome.php">
<input class="back-btn" type="submit" value="Back" name="btnClick">
          </a>

          <a href="welcome.php">
            </form>

</body>
</html>
