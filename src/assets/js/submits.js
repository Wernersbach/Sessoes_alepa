async function request(url, dados)
{	
	let formData;

	formData.append("dados", dados);

	return await fetch(url, {
			method: 'post',
			body: formData
		})
		.then((response) => response.json())
		.then((result) => {
			return result;
		})
		.catch((error) => {
			return error;
		});
}