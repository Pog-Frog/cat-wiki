// export const getCatsInfo = async () => {
//   if (localStorage.getItem('catsInfo')) {
//     return JSON.parse(localStorage.getItem('catsInfo'))
//   }

//   const response = await fetch('https://api.thecatapi.com/v1/breeds', {
//     headers: {
//       'x-api-key': '274f31b1-d8a7-43dd-855c-cd91492b85b1',
//     },
//   })

//   const data = await response.json()
//   localStorage.setItem('catsInfo', JSON.stringify(data))

//   return data
// }

export const getAllCats = async () => {
  // if (localStorage.getItem('catsInfo')) {
  //   return JSON.parse(localStorage.getItem('catsInfo'))
  // }

  const response = await fetch('http://127.0.0.1:8000/api/cats')

  const data = await response.json()
  console.log(data)
  localStorage.setItem('catsInfo', JSON.stringify(data))

  return data
}

export const getPopular = async () => {
  const response = await fetch('http://127.0.0.1:8000/api/cats/top')
  const data = await response.json()
  return data
}
