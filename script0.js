function sendMessage(){
  var xhr= new XMLHttpRequest();
  xhr.onreadystatechange = function(){
    if(xhr.readyState == 4 && xhr.status == 200){

      var date= new Date();
      var annee = date.getFullYear();
      var mois = date.getMonth()+1;
      var jour = date.getDay()+17;
      var heure = date.getHours();
      var minute = date.getMinutes();
      var seconde = date.getSeconds();

      var grandparent = document.getElementById('tab');
      var parent = document.createElement("tr");
      var enfant2 = document.createElement("td");
      var enfant3 = document.createElement("td");
      enfant2.innerHTML=annee+"-"+mois+"-"+jour+" "+heure+":"+minute+":"+seconde;
      enfant3.innerHTML=document.getElementById("comment").value;

      grandparent.appendChild(parent);
      parent.appendChild(enfant2);
      parent.appendChild(enfant3);

      document.getElementById("comment").value="";
    }
  };
  xhr.open('POST','save_comment.php');

  //  Version 1
  // xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  // var data = 'comm=' +document.getElementById('comment').value+'&id=77';

  //  Version 2
  var data = new FormData();
  data.append('comm',document.getElementById('comment').value);

  xhr.send(data);
}
//=============================================================================================//
//=============================================================================================//
function Like(){
  var xhr= new XMLHttpRequest();
  xhr.onreadystatechange = function(){
    if(xhr.readyState == 4 && xhr.status == 200){
      var myObj = JSON.parse(this.responseText);
      document.getElementById("like").innerHTML=myObj.Lyke;
    }
  };
  xhr.open('POST','like.php');

  //  Version 1
  // xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  // var data = 'comm=' +document.getElementById('comment').value+'&id=77';

  //  Version 2
  var data = new FormData();
  data.append('like',document.getElementById('like').value);

  xhr.send(data);
  }
//=============================================================================================//
//=============================================================================================//
function Dislike(){
  var xhr= new XMLHttpRequest();
  xhr.onreadystatechange = function(){
    if(xhr.readyState == 4 && xhr.status == 200){
      var myObj = JSON.parse(this.responseText);
      document.getElementById("dislike").innerHTML=myObj.Dislike;
    }
  };
  xhr.open('POST','dislike.php');

  //  Version 1
  // xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  // var data = 'comm=' +document.getElementById('comment').value+'&id=77';

  //  Version 2
  var data = new FormData();
  data.append('dislike',document.getElementById('dislike').value);

  xhr.send(data);
}
