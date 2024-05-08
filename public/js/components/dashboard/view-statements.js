export default function ViewStatments(){
	const [daterange,setdaterange] = useState("all")
	
	
    useEffect(() => {
        return () => {
            
			
			
			
        }
    }, [])
	
	
	return (
		<div className = "root">
		
		
		

		<Dropdown className ="count" options=[10,20,50,100] value=20/>
		
		
		
		<Daterange>
		<div className="statement-container">
		
		
		</div>
		</div>
		
		
		
		
		
		
		
	);
	
	
	
}