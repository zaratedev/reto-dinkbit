const sliderRode = document.getElementById("sliderRode");
const sliderFortnight = document.getElementById("sliderFortnight");
// Values of slides
var valueRode = sliderRode.value;
var valueFortnight = sliderFortnight.value;
$(document).ready(function() {
  // get table of amortization
  generateTableAmortization(valueRode, valueFortnight);
});

sliderRode.oninput = function() {
  const labelRode = document.getElementById("labelRode");

  labelRode.innerHTML = '$' + this.value;
  valueRode = this.value;
  // get table of amortization
  generateTableAmortization(valueRode, valueFortnight);
}

sliderFortnight.oninput = function() {
  const labelFortnight = document.getElementById("labelFortnight");
  labelFortnight.innerHTML = this.value;
  valueFortnight = this.value;
  // get table of amortization
  generateTableAmortization(valueRode, valueFortnight);
}

function generateTableAmortization(rode, fortnight) {
  const labelPayment = document.getElementById("labelPayment");

  axios({
    method: 'POST',
    url: 'generate-table-amortization',
    data: {
      rode: rode,
      fortnight: fortnight
    }
  }).then( response => {
    let table = response.data.table;
    $("#tbody").empty();
    $.each(table, function( index, value){
      labelPayment.innerHTML = '$' + value.payment;
      const row = '<tr><td>'+value.numberPayment+'</td><td>'+value.outstandingBalance+'</td><td>'+value.amortization+'</td><td>'+value.interest+'</td><td>'+value.iva+'</td><td>'+value.payment+'</td></tr>';
      $("#tableAmortization").append(row);
    });
  })
}
