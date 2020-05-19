import React from "react"
import TodoItem from "./TodoItem"

function ToDoList(list) {
    let todoItems = list.list.map(item => <TodoItem 
        key={item.id} 
        item={item} 
        showAll={list.showAll}
        handleChange={()=>{
            list.handleChange(item.id)
        }}/>)

    
    return (
        <div>
            {todoItems}
        </div>
    )
}

export default ToDoList