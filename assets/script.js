function toast (message,type){
     const toast = document.querySelector("#toast");

    toast.textContent=message;

    if(type==="succes") toast.className="bg-green-600 text-white px-6 py-3 rounded shadow fixed top-5 left-1/2 -translate-x-1/2";
    if(type === "error") toast.className="bg-red-600 text-white px-6 py-3 rounded shadow fixed top-5 left-1/2 -translate-x-1/2";

    
}