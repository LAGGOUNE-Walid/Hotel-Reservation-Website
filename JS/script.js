const navList = document.querySelectorAll('.main-nav > li > a')
console.log(navList)

navList.forEach(element =>{
  element.addEventListener('click', function(){
    navList.forEach(element => element.classList.remove("active"))
    this.classList.add("active")
  })
})

onload = () => {
  navList[0].classList.add('active')
}