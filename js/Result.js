const select = document.getElementById("result");
const container = document.getElementById("switch");

const changeSwitcher = () => {
  if (select.value == "year1" || select.value == "year2") {
    fetch("http://localhost/xther/classes/grade.class.php")
      .then(response => {
        if (!response.ok) {
          throw new Error(`HTTP error! Status: ${response.status}`);
        }
        return response.json();
      })
      .then(data => {
        generateTable(data);
      })
      .catch(error => {
        console.error('Error fetching data:', error);
      });
  }
};

const generateTable = (data) => {
 console.log(data);
};





