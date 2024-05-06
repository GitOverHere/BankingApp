export default function card(){
	
	const [loading,setloading] = useState(false);
	const [cardnumber,setcardnumber] = useState(0)
	const [cvc,setcvc] = useState(0)
	const [expiration,setexpiration] = useState("01/01")
	
	
	
	
	useState( => {
		// Grab account info
		url = window.location.href
		params = URLSearchParams(url)
		accountnumber =  params.get("number")
		
		
		
		const response = fetch(url+"../api/card/info?accountnumber="+accountnumber)
		
		
		
		
		
		
	})
	
	return (
	
	
	if(loading){
		
		
		
		
	}
	else {
		
		
		
		
		
		
		
		
		
		
	}
	
	
	
	
	
	
	
	)
	
	
	
	
	
	
}