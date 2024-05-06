export default function Balance(){
const [balance,setbalance] = useState(0.00)

useEffect(() => {
    return () => {
        

        url =  new URLSearchParams(location.href);
        
        number = url.get('number');

        const response = fetch("../api/accounts/balance?number="+number);
        
        json = JSON.stringify(response);


        setapr(json["apr"]);

        aprready() = true;

        
    }
}, [])










}