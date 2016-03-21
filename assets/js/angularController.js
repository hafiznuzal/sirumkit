var app = angular.module('rumahSakit', []);
app.controller('formController', function($scope) {
    var menuSelects = [];
    
    var menu = [];
    menu.push({'value':1,'name':'Rawat Inap'});
    menu.push({'value':2,'name':'Rawat Jalan'});
    menu.push({'value':3,'name':'Iuran Bulanan'});
    menuSelects.push(menu);

    menu = [];
    menu.push({'value':1,'name':'Gaji'});
    menu.push({'value':2,'name':'THR'});
    menu.push({'value':3,'name':'Bensin'});
    menuSelects.push(menu);

    if($('input[name=transaksi]:checked').val()==1)
	{
		$scope.option = menuSelects[0];
		$scope.selectedItem = menuSelects[0][0].value;

	}
	else if($('input[name=transaksi]:checked').val()==2)
	{
		$scope.option = menuSelects[1];
		$scope.selectedItem = menuSelects[1][0].value;
	}

    $scope.cekFilter = function(){
    	if($('input[name=transaksi]:checked').val()==1)
    	{
    		$scope.option = menuSelects[0];
    		$scope.selectedItem = menuSelects[0][0].value;
    	}
    	else if($('input[name=transaksi]:checked').val()==2)
    	{
    		$scope.option = menuSelects[1];
    		$scope.selectedItem = menuSelects[1][0].value;
    	}
    }

    $scope.submit = function(){
    	var nama =  $scope.namaTransaksi
    	var transaksi = $('#selectedItem option:selected').text();
    	var uraian = $scope.uraian;
    	var uang = $scope.uang;
    	var message = "<ul>"+"<li>"+"Nama Transaksi : "+nama+"</li>"+"<li>"+"Transaksi : "+transaksi+"</li>"+"<li>"+"Uraian : "+uraian+"</li>"+"<li>"+"Pembayaran : "+uang+"</li>"+"</ul>";
    	swal({   title: "<h2>Apakah anda yakin dengan data ini ?</h2>!",   text: message,   html: true });
    }
});