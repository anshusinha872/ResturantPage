// set date
const date = (document.getElementById("date").innerHTML= new Date().getFullYear());
// nav toggle
const navBtn = document.getElementById('nav-toggle');
const links = document.getElementById('nav-links');
console.log(navBtn);
console.log(links);
// add event listener
navBtn.addEventListener("click",()=>{
    console.log("Nav-btn clicked");
    links.classList.toggle('show-links');
})

// nav fixed
const navBar = document.querySelector(".nav-bar");
console.log(navBar);
window.addEventListener("scroll",()=>{
    console.log(pageYOffset);
    if(window.pageYOffset > 84 )
    {
        navBar.classList.add("fixed");
    }
    else{
        navBar.classList.remove("fixed");
    }
});
// dark mode
const bodyblack = document.getElementById('dark-class');
const darkModeOff = document.getElementById('dark-mode-off');
const darkModeon = document.getElementById('dark-mode-on');
console.log(darkModeOff);
console.log(darkModeon);
const darkModeDiv = document.getElementById('btn-dark-mode-on');
const lightModeDiv = document.getElementById('btn-dark-mode-off');
console.log(darkModeDiv);
console.log(lightModeDiv);
darkModeOff.addEventListener("click",()=>{
    console.log('light mode button clicked');
    lightModeDiv.classList.add('display-none');
    darkModeDiv.classList.remove('display-none')
    bodyblack.classList.add('service-dark-mode');
});
darkModeon.addEventListener("click",()=>{
    console.log('dark mode button clicked');
    darkModeDiv.classList.add('display-none');
    lightModeDiv.classList.remove('display-none');
    bodyblack.classList.remove('service-dark-mode');
});

//smooth scroll
const scrollLinks = document.querySelectorAll(".scroll-link");
console.log(scrollLinks);
scrollLinks.forEach((link)=>{
    link.addEventListener("click",(e)=>{
        e.preventDefault();
        console.log("link is clicked"); 
        links.classList.remove('show-links');
        const id = e.target.getAttribute("href").slice(1);
        console.log(id);
        const element = document.getElementById(id);
        console.log(element.offsetTop);
        //position 
        let position;
        if(navBar.classList.contains("fixed")){
            position = element.offsetTop -67;
        }
        else{
            position = element.offsetTop - 110; 
        }
        if(window.innerWidth < 992){
            if(navBar.classList.contains("fixed")){
                position = element.offsetTop - 67 ;
            }
            else
            {
                position = element.offsetTop -355-67;
            }
        }

        //windows scrollto
        window.scrollTo({
            left: 0,
            top: position,
            behavior: "smooth"
        });
    });
});
