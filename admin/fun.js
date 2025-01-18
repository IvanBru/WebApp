function showBus(link) {  
  
        var cont = document.getElementById('showBus');    
        var http = createRequestObject();  
        if( http )   
        {  
            http.open('post', link);  
            http.onreadystatechange = function ()   
            {  
                if(http.readyState == 4)   
                {  
                    cont.innerHTML = http.responseText;  
                }  
            }  
            http.send(null);      
        }  
        else   
        {  
            document.location = link;  
        }  
    }
	$(function(){

                  $('.orderTicket').click(function(){

                      $('input[name="sheet"]').value($(this).value());

                  });

              });

function showPersonal(link) {  
  
        var cont = document.getElementById('showPersonal');    
        var http = createRequestObject();  
        if( http )   
        {  
            http.open('post', link);  
            http.onreadystatechange = function ()   
            {  
                if(http.readyState == 4)   
                {  
                    cont.innerHTML = http.responseText;  
                }  
            }  
            http.send(null);      
        }  
        else   
        {  
            document.location = link;  
        }  
    }
function showSheet(link) {  
  
        var cont = document.getElementById('showSheet');    
        var http = createRequestObject();  
        if( http )   
        {  
            http.open('post', link);  
            http.onreadystatechange = function ()   
            {  
                if(http.readyState == 4)   
                {  
                    cont.innerHTML = http.responseText;  
                }  
            }  
            http.send(null);      
        }  
        else   
        {  
            document.location = link;  
        }  
    }
	function showRoute(link) {  
  
        var cont = document.getElementById('showRoute');    
        var http = createRequestObject();  
        if( http )   
        {  
            http.open('post', link);  
            http.onreadystatechange = function ()   
            {  
                if(http.readyState == 4)   
                {  
                    cont.innerHTML = http.responseText;  
                }  
            }  
            http.send(null);      
        }  
        else   
        {  
            document.location = link;  
        }  
    }
	function showModel(link) {  
  
        var cont = document.getElementById('showModel');    
        var http = createRequestObject();  
        if( http )   
        {  
            http.open('post', link);  
            http.onreadystatechange = function ()   
            {  
                if(http.readyState == 4)   
                {  
                    cont.innerHTML = http.responseText;  
                }  
            }  
            http.send(null);      
        }  
        else   
        {  
            document.location = link;  
        }  
    }
	function showQuery(link) {  
  
        var cont = document.getElementById('showQuery');    
        var http = createRequestObject();  
        if( http )   
        {  
            http.open('post', link);  
            http.onreadystatechange = function ()   
            {  
                if(http.readyState == 4)   
                {  
                    cont.innerHTML = http.responseText;  
                }  
            }  
            http.send(null);      
        }  
        else   
        {  
            document.location = link;  
        }  
    }
	
	function showPassan(link) {  
  
        var cont = document.getElementById('showPassan');    
        var http = createRequestObject();  
        if( http )   
        {  
            http.open('post', link);  
            http.onreadystatechange = function ()   
            {  
                if(http.readyState == 4)   
                {  
                    cont.innerHTML = http.responseText;  
                }  
            }  
            http.send(null);      
        }  
        else   
        {  
            document.location = link;  
        }  
    }
	function showNews(link) {  
  
        var cont = document.getElementById('showNews');    
        var http = createRequestObject();  
        if( http )   
        {  
            http.open('post', link);  
            http.onreadystatechange = function ()   
            {  
                if(http.readyState == 4)   
                {  
                    cont.innerHTML = http.responseText;  
                }  
            }  
            http.send(null);      
        }  
        else   
        {  
            document.location = link;  
        }  
    }
  
    // создание ajax объекта  
    function createRequestObject()   
    {  
        try { return new XMLHttpRequest() }  
        catch(e)   
        {  
            try { return new ActiveXObject('Msxml2.XMLHTTP') }  
            catch(e)   
            {  
                try { return new ActiveXObject('Microsoft.XMLHTTP') }  
                catch(e) { return null; }  
            }  
        }  
    }  