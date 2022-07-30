// const axios = require('axios');

axios.get('https://api-mainnet.magiceden.io/popular_collections', {
  headers: {
    "Accept": "application/json, text/plain, */*",
    "Access-Control-Allow-Origin": "*",
  },
  params: {
    "more": "true",
    "timeRange": "7d",
    "edge_cache": "true"
  }
})
.then(function (response) {
  console.log(response);
})
.catch(function (error) {
  console.log(error);
})
.then(function () {
  // always executed
});  

// const pop_collection = async () => {
//   let result = await axios.get("https://api-mainnet.magiceden.io/popular_collections", {
//     params: {
//       "more": "true",
//       "timeRange": "7d",
//       "edge_cache": "true"
//     },
//     headers: {
//       "Accept-Encoding": "gzip, deflate, br",
//       "Accept": "application/json, text/plain, */*"
//     }
//   });
//   console.log(result);
// } 

// pop_collection();