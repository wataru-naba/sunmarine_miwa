

const schema =
[
	{id:'f-name',name:'name', release:true,format:'input',require:true,match:null},
	{id:'f-kana',name:'kana', release:true,format:'input',require:true,match:null},
	{id:'f-email',name:'email', release:true,format:'input',require:true,match:"^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$",matchErrText:'メールアドレスの形式ではありません。'},
	{id:'f-tel',name:'tel', release:true,format:'input',require:true,match:"^^0[0-9]{9,}$",matchErrText:'ハイフンなし数字のみ 10〜11桁で入力してください。'},
	{id:'f-massage',name:'message', release:true,format:'textarea',require:true,match:null},

];	

const setError = (item) => {
	item.release = false;
	document.getElementById(`${item.name}_err`).classList.add('err_on');	
}

const releaseError = (item) => {
	item.release = true;
	document.getElementById(`${item.name}_err`).classList.remove('err_on');	
}

const matchValidate = (item, val) => {
	if(item.match && !val.match(item.match)){
		return true;
	}else{
		return false;
	}

}

const requireValidate = (item,val) => {
	if(item.require && val == ""){
		return true;
	}else{
		return false;
	}
};

const matchErrSet = (item) => {
	document.getElementById(`${item.name}_err`).textContent = item.matchErrText;
	setError(item);
}

const requireErrSet = (item) => {
	document.getElementById(`${item.name}_err`).textContent = '※ 項目が未入力です';
	setError(item);
}

window.addEventListener('DOMContentLoaded',function(){
	schema.map((item) => {
		
		const formInput = document.getElementById(item.id);
		
		//初期状態チェック.
		if(requireValidate(item,formInput.value)){
			requireErrSet(item);
		}else{
			releaseError(item);
		}

		//Eventチェック.
		formInput.addEventListener('input',function(){

			if(requireValidate(item,this.value)){
				requireErrSet(item);
			}else{
				if(matchValidate(item,this.value)){
					matchErrSet(item);
				}else{
					releaseError(item);
				}
			}
		});

	});

	const formSubmit = document.getElementById('f-form');
	
	formSubmit.onsubmit = function(){
		let errItems = schema.filter((item) => {
			return item.release === false && item.require === true;
		});

		return errItems.length === 0 ? true : false;
		
	};


});
