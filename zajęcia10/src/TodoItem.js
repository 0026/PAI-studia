import React from "react"

function TodoItem(props) {
    return (
        <div className={`${props.showAll && props.item.completed?"notDisplay":""}`}>
            <p>
                <input 
                    type="checkbox" 
                    checked={props.item.completed} 
                    onChange={() => props.handleChange(props.item.id)}
                />
                <span className={`${props.item.completed?"done":""}`}>
                {props.item.text}
                </span>
            </p>
        </div>
    )
}

export default TodoItem