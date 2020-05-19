import React from "react"

function NewTask(parent){
    return (
        <div>
            <form>
             <input type="text" id="newTask" />
             <input type='button' 
                    value="Dodaj"
                    onClick={()=>{
                        parent.addTaskHendler(document.getElementById("newTask").value)
                        document.getElementById("newTask").value=''
                        }
                }/>
            </form>
        </div>
    )
}

export default NewTask