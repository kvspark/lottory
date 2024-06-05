

  StartCountDown("clock1","08/22/2023   2:30 PM -0400")
  StartCountDown("clock2","08/22/2023  2:30 PM -0400")
  StartCountDown("clock3","08/22/2023  5:30 PM -0400")
  StartCountDown("clock4","08/22/2023  7:30 PM -0400")
  
  /*
  	Author:		Robert Hashemian (http://www.hashemian.com/)
  	Modified by:	Munsifali Rashid (http://www.munit.co.uk/)
  	Modified by:	Tilesh Khatri
  */
  
  function StartCountDown(myDiv,myTargetDate)
  {
    var dthen	= new Date(myTargetDate);
    var dnow	= new Date();
    ddiff		= new Date(dthen-dnow);
    gsecs		= Math.floor(ddiff.valueOf()/1000);
    CountBack(myDiv,gsecs);
  }
  
  function Calcage(secs, num1, num2)
  {
    s = ((Math.floor(secs/num1))%num2).toString();
    if (s.length < 2) 
    {	
      s = "0" + s;
    }
    return (s);
  }
  
  function CountBack(myDiv, secs)
  {
    var DisplayStr;
    var DisplayFormat = "%%D%% Day(s) %%H%%:%%M%%:%%S%%";
    DisplayStr = DisplayFormat.replace(/%%D%%/g,	Calcage(secs,86400,100000));
    DisplayStr = DisplayStr.replace(/%%H%%/g,		Calcage(secs,3600,24));
    DisplayStr = DisplayStr.replace(/%%M%%/g,		Calcage(secs,60,60));
    DisplayStr = DisplayStr.replace(/%%S%%/g,		Calcage(secs,1,60));
    if(secs > 0)
    {	
      document.getElementById(myDiv).innerHTML = DisplayStr;
      setTimeout("CountBack('" + myDiv + "'," + (secs-1) + ");", 990);
    }
    else
    {
      document.getElementById(myDiv).innerHTML = "Time to Draw Ended";
    }
  }

