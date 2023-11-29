window.addEventListener("scroll", () => {
    if (window.pageYOffset > 100) {
        var count = document.getElementById("counter");
        let count2 = setInterval(update);
        let count3 = setInterval(update2);
        let counts = setInterval(updated);
        let upto = 140;
        function updated() {
          count.innerHTML = ++upto;
          if (upto === 165) {
            clearInterval(counts);
          }
        }
        
        let option = 1700;
        function update() {
          var counted = document.getElementById("counter2");
          counted.innerHTML = ++option;
          if (option === 1750) {
            clearInterval(count2);
          }
        }
        let option1 = 36900;
        function update2() {
          var counted = document.getElementById("counter3");
          counted.innerHTML = ++option1;
          if (option1 === 37000) {
            clearInterval(count3);
          }
        }
    } 
  })
