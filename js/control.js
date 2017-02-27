var color = 1;
var street;

var time;


function setStreet(gotStreet)
{
    street = gotStreet;
    console.log(gotStreet);

    setTime();
}

function setTime()
{

  time = __("time").value * 1000;

  var data = JSON.stringify(time);

  localStorage.setItem("Time", data);

}

function __(id)
{
    var id = document.getElementById(id);
    return id;
}

function Run()
{
     time = localStorage.getItem("Time");

    if (time > 0)
    {
      var timer = setInterval(paint, time);
      console.log("user");
    }

    else
    {

        var timer = setInterval(paint, 1000);
        console.log("system");
    }
}

  function changeColor(canvas, color)
  {
    var ctx = canvas.getContext("2d");

    ctx.beginPath();
    ctx.arc(200,125,85,0,2*Math.PI);
    ctx.fillStyle = color;
    ctx.fill();

    ctx.stroke();
  }

function paint()
{
  var streetA = __("streetA");
  var streetB = __("streetB");

    if (color === 1)
    {
      var ctx = streetA.getContext("2d");

      changeColor(streetA, "green");
      changeColor(streetB, "red");
      //calle B color rojo

      color++;
    }

    else if (color === 2)
    {

      changeColor(streetA, "yellow");
      changeColor(streetB, "yellow");
      //calle B color amarillo

      color++;
    }

    else if (color === 3)
    {

      changeColor(streetA, "red");
      changeColor(streetB, "green");

      color = 1;
      //calle B color verde
    }
}

function p()
{
    console.log(55);
}
