const smoothScroll=()=>{document.querySelectorAll('a[href^="#"]:not(a[href="#"])').forEach(r=>{r.addEventListener("click",e=>{e.preventDefault();let t=r.getAttribute("href");t=t.substring(1),document.getElementById(t).scrollIntoView({behavior:"smooth"})})})};document.querySelectorAll('a[href^="#"]:not(a[href="#"])').forEach(r=>{r.addEventListener("click",e=>{e.preventDefault();let t=r.getAttribute("href");t=t.substring(1),document.getElementById(t).scrollIntoView({behavior:"smooth"})})});