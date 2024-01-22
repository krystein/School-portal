const select = document.getElementById("level");
const container = document.getElementById("switcher");
function updateCGPA() {
    var gradeInputs = document.querySelectorAll('.gradeInput');
    var resultOutput = document.getElementById('result');

    var totalCredits = 0;
    var totalGradePoints = 0;

    // Mapping letter grades to grade points
    var gradeMap = {
        'A': 5.0,
        'B': 4.0,
        'C': 3.0,
        'D': 2.0,
        'E': 1.0,
        'F': 0.0
    };

    gradeInputs.forEach(function (gradeInput) {
        var row = gradeInput.closest('tr');
        var credits = parseFloat(row.cells[1].innerText);
        var grade = gradeInput.value.trim().toUpperCase();

        totalCredits += credits;

        if (gradeMap.hasOwnProperty(grade)) {
            totalGradePoints += gradeMap[grade] * credits;
        }
    });

    // Calculate CGPA
    var cgpa = (totalGradePoints / totalCredits).toFixed(2);

    resultOutput.innerHTML = 'Your CGPA is: ' + cgpa;
}
const changeSwitcher = () => {
  if (select.value == "100L") {
    container.innerHTML = `
      <table id="courseTable" class="container">
      <thead>
          <tr>
              <th>Course Name</th>
              <th>Credits</th>
              <th>Grade</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>GES 100.1</td>
              <td>3</td>
              <td><input type="text" class="gradeInput" placeholder="Grade" oninput="updateCGPA()"></td>
          </tr>
          <tr>
              <td>GES 102.1</td>
              <td>2</td>
              <td><input type="text" class="gradeInput" placeholder="Grade" oninput="updateCGPA()"></td>
          </tr>
          <tr>
              <td>CHM 130.1</td>
              <td>3</td>
              <td><input type="text" class="gradeInput" placeholder="Grade" oninput="updateCGPA()"></td>
          </tr>
          <tr>
              <td>PHY 101.1</td>
              <td>3</td>
              <td><input type="text" class="gradeInput" placeholder="Grade" oninput="updateCGPA()"></td>
          </tr>
          <tr>
              <td>PHY 102.1</td>
              <td>1</td>
              <td><input type="text" class="gradeInput" placeholder="Grade" oninput="updateCGPA()"></td>
          </tr>
          <tr>
              <td>MTH 110.1</td>
              <td>3</td>
              <td><input type="text" class="gradeInput" placeholder="Grade" oninput="updateCGPA()"></td>
          </tr>
          <tr>
              <td>MTH 120.1</td>
              <td>3</td>
              <td><input type="text" class="gradeInput" placeholder="Grade" oninput="updateCGPA()"></td>
          </tr>
          <tr>
              <td>ENG 101.1</td>
              <td>3</td>
              <td><input type="text" class="gradeInput" placeholder="Grade" oninput="updateCGPA()"></td>
          </tr>
      </tbody>
  </table>

  <h4 id="result" class="mt-2"></h4>
          `;
  } else if (select.value == "200L") {
    container.innerHTML = `
    <table id="courseTable">
    <thead>
        <tr>
            <th>Course Name</th>
            <th>Credits</th>
            <th>Grade</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>ENG 213.1</td>
            <td>2</td>
            <td><input type="text" class="gradeInput" placeholder="Grade" oninput="updateCGPA()"></td>
        </tr>
        <tr>
            <td>ENG 201.1</td>
            <td>3</td>
            <td><input type="text" class="gradeInput" placeholder="Grade" oninput="updateCGPA()"></td>
        </tr>
        <tr>
            <td>ENG 202.1</td>
            <td>2</td>
            <td><input type="text" class="gradeInput" placeholder="Grade" oninput="updateCGPA()"></td>
        </tr>
        <tr>
            <td>ENG 203.1</td>
            <td>3</td>
            <td><input type="text" class="gradeInput" placeholder="Grade" oninput="updateCGPA()"></td>
        </tr>
        <tr>
            <td>ENG 204.1</td>
            <td>2</td>
            <td><input type="text" class="gradeInput" placeholder="Grade" oninput="updateCGPA()"></td>
        </tr>
        <tr>
            <td>ENG 210.1</td>
            <td>3</td>
            <td><input type="text" class="gradeInput" placeholder="Grade" oninput="updateCGPA()"></td>
        </tr>
        <tr>
            <td>PHY 216.1</td>
            <td>3</td>
            <td><input type="text" class="gradeInput" placeholder="Grade" oninput="updateCGPA()"></td>
        </tr>
    </tbody>
</table>

<h4 id="result" class="mt-2"></h4>
          `;
  } 
};
