$( document ).ready(function() {
	jQuery('select[name=dependence]').change(function() {
		if (this.value == 'ARCOI') {
			jQuery('select[name=winners]').val(0);
		}

		if (this.value == 'OFPLA' || this.value == 'DINCO' || this.value == 'COEST' || this.value == 'DIRSE' ||
			this.value == 'OFITE' || this.value == 'DIPON' || this.value == 'DIASE' || this.value == 'INSGE' || this.value == 'DIRAF' ||
			this.value == 'DIBIE' || this.value == 'DITAH' || this.value == 'DESAP' || this.value == 'DITRA' ||
			this.value == 'POLFA' || this.value == 'DISAN' || this.value == 'DERIS' || this.value == 'DIPOL' ||
			this.value == 'DEMAG' || this.value == 'DECAS' || this.value == 'DECAQ' || this.value == 'DEMAN' ||
			this.value == 'DEBOL' || this.value == 'DECAL' || this.value == 'DISEC' || this.value == 'DENOR' ||
			this.value == 'DEQUI' || this.value == 'DEATA' || this.value == 'DEUIL' || this.value == 'DETOL' ||
			this.value == 'DECAU' || this.value == 'DIPRO' || this.value == 'DECOR' || this.value == 'DEMET' ||
			this.value == 'DESUC' || this.value == 'METUM' || this.value == 'MEMAZ' || this.value == 'MENEV' ||
			this.value == 'MEPOY' || this.value == 'MEPAZ' || this.value == 'METIB' || this.value == 'MEMOT' ||
			this.value == 'MESAN' || this.value == 'REGI1' || this.value == 'REGI2' || this.value == 'REGI3' ||
			this.value == 'REGI4' || this.value == 'REGI5' || this.value == 'REGI6' || this.value == 'REGI7' ||
			this.value == 'REGI8' ) {
			jQuery('select[name=winners]').val(1);
		}

		if (this.value == 'DEVAU' || this.value == 'DEGUN' || this.value == 'DEVIC' || this.value == 'DINAE' ||
			this.value == 'DEAMA' || this.value == 'SUDIR-SEGEN' || this.value == 'DEGUV' || this.value == 'DEPUY' ||
			this.value == 'DEARA' || this.value == 'DECHO' || this.value == 'DEURA' || this.value == 'DIJIN' ||
			this.value == 'DEGUA' || this.value == 'DESAN' || this.value == 'DEBOY' || this.value == 'DICAR' ||
			this.value == 'DENAR' || this.value == 'DECES' || this.value == 'DIRAN' || this.value == 'MEPER' ||
			this.value == 'MEVIL' || this.value == 'MECAR' || this.value == 'MEBUC' || this.value == 'MECUC' ||
			this.value == 'TEGEN') {
			jQuery('select[name=winners]').val(2);
		}

		if (this.value == 'DEVAL' || this.value == 'DEANT' || this.value == 'DECUN' || this.value == 'MEBAR' ) {
			jQuery('select[name=winners]').val(3);
		}

		if (this.value == 'MECAL') {
			jQuery('select[name=winners]').val(4);
		}

		if (this.value == 'MEVAL') {
			jQuery('select[name=winners]').val(5);
		}

		if (this.value == 'MEBOG') {
			jQuery('select[name=winners]').val(9);
		}

		if (this.value == 'CASUR') {
			jQuery('select[name=winners]').val(10);
		}
	});
});