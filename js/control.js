
var streetA = __("canvas_StreetA");
var streetB = __("canvas_StreetB");

var time;

function __(id)
{
    var id = document.getElementById(id);
    return id;
}

function Run(timePHP)
{
  time = timePHP * 1000;

    if (time > 0)
    {

      setInterval(changeColor, time);
      console.log("user");
    }

    else
    {

        setInterval(changeColor, 4000);
        console.log("system");
    }
}

function setStreet(n)
{
    data = JSON.stringify(n);
    localStorage.setItem("street", data);
}

  function setColor(canvas, color)
  {
    var ctx = canvas.getContext("2d");

    ctx.beginPath();
    ctx.arc(200,125,85,0,2 * Math.PI);
    ctx.fillStyle = color;
    ctx.fill();

    ctx.stroke();
  }

function changeColor()
{

    var street = localStorage.getItem("street");

    if (street === "1")
    {
      $.ajax(
        {
        url: 'setColor.php',
        type: 'POST',
        data: {street: street}
        })
      .done(function(color)
      {
        setColor(streetA, color);
        console.log(color);
      });

    }

    else if (street === "2")
    {
      $.ajax(
        {
        url: 'setColor.php',
        type: 'POST',
        data: {street: street}
        })
      .done(function(color)
      {
        setColor(streetB, color);
        console.log(color);
      });


    }

  }

function setTime()
{
  var set_Time = $("#time").val();

  if (isNaN(set_Time))
  {
  window.alert("numero invalido");
  $("#time").val(" ");
  }

  else
  {
      $.post('setTime.php', {new_Time: set_Time}, function()
        {
          window.alert("El tiempo es " + set_Time + " segundos ahora");
        });
  }

}
