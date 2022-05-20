const hotelBox = document.querySelectorAll('.box')
const hotelAlger = document.querySelectorAll('.alger')
const hotelOran = document.querySelectorAll('.oran')
const hotelMostaganem = document.querySelectorAll('.mostaganem')

const selectInput = document.getElementById('wilaya')
const region = document.querySelectorAll('#wilaya option')

console.log(hotelBox)
console.log(hotelAlger)
console.log(hotelMostaganem)
console.log(hotelOran)

selectInput.addEventListener('change', () => {
  if(selectInput.value === "Tout" || selectInput.value === " "){
    hotelBox.forEach(box => {
      box.style.display = 'block'
    })
  } 
  else if(selectInput.value === "Alger" ) {
    hotelBox.forEach(box => {
      box.style.display = 'none'
    })
    hotelAlger.forEach(element => {
      element.style.display = 'block'
    })
  }
  else if(selectInput.value === "Oran" ) {
    hotelBox.forEach(box => {
      box.style.display = 'none'
    })
    hotelOran.forEach(element => {
      element.style.display = 'block'
    })
  }
  else if(selectInput.value === "Mostaganem" ) {
    hotelBox.forEach(box => {
      box.style.display = 'none'
    })
    hotelMostaganem.forEach(element => {
      element.style.display = 'block'
    })
  }
})


