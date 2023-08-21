$("document").ready(function () {
    var requestOptions = {
      method: "GET",
    };
  
    fetch(
      "https://api.geoapify.com/v1/ipinfo?&apiKey=ce74bd0d7e3f455da4a13379be6996ea",
      requestOptions
    )
      .then(function (response) {
        return response.json();
      })
      .then(function (results) {
        console.log(results);
        // let country = results["country"]["name"];
        let country = results["city"]["name"];
        let flag = results["country"]["flag"];
        $(".country_name span").text(country);
        $(".country_flag span").text(flag);
      });
  });
  