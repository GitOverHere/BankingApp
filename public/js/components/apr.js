import { CircularProgress } from '@mui/material';


export default function apr(){
const [aprloaded,aprready] = useState(false)
const [apr,setapr] = useState(0.01)


useEffect(() => {
    return () => {
        

        url =  new URLSearchParams(location.href);
        
        number = url.get('number');

        const response = fetch("../api/accounts/apr?number="+number);
        
        json = JSON.stringify(response);


        setapr(json["apr"]);

        aprready() = true;

        
    }
}, [])



if(apr == false){

    return (
        <CircularProgress />
       

    );


}

else {


    return (


        <span className="apr">{this.apr}</span>

    );



}




}