import React from "react"

function Filter(parent){
    //console.log(typeof (parent.filtr.use))
    return (
        <div>
            <p>
                <input 
                    type="checkbox" 
                    checked={parent.filtr.use} 
                    onChange={()=>parent.addFilter()}
                />
                Ukryj
            </p>
        </div>
    )
}

export default Filter