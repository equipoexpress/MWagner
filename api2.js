const encodedParams = new URLSearchParams();
encodedParams.append("apiKey", "<REQUIRED>");
encodedParams.append("projectId", "<REQUIRED>");

const options = {
	method: 'POST',
	headers: {
		'content-type': 'application/x-www-form-urlencoded',
		'X-RapidAPI-Key': '18746b1badmsh167992364ab66bfp103f6fjsn7c231cae6ffb',
		'X-RapidAPI-Host': 'BehanceraygorodskijV1.p.rapidapi.com'
	},
	body: encodedParams
};

fetch('https://behanceraygorodskijv1.p.rapidapi.com/getProject', options)
	.then(response => response.json())
	.then(response => console.log(response))
	.catch(err => console.error(err));