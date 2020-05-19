import React from "react"
import TodoItem from "./TodoItem"
import todosData from "./todosData"
import NewTask from "./NewTask"
import ToDoList from "./ToDoList"
import Filter from "./Filter"

class App extends React.Component {
    
    constructor() {
        super()
        this.state = {
            todos: todosData,
            use: false,
            currentId:5
        }
        this.handleChange = this.handleChange.bind(this)
        this.filterHendler = this.filterHendler.bind(this)
        this.addTaskHendler = this.addTaskHendler.bind(this)
        //useFilter=false
        //console.log(this.useFilter)

    }
    
    handleChange(id) {
        this.setState(prevState => {
            const updatedTodos = prevState.todos.map(todo => {
                if (todo.id === id) {
                    todo.completed = !todo.completed
                }
                return todo
            })
            return {
                todos: updatedTodos
            }
        })
    }

    addTaskHendler(task){
      this.setState( prevState=>{
        let newTab = prevState.todos
        newTab.push({
            id: prevState.currentId+1,
            text: task,
            completed: false
        })

        return {
            todos: newTab,
            currentId: prevState.currentId+1,
        }

      })
    }

    filterHendler(){   
        this.setState(prevState =>{
            //console.log(prevState)
            return {
                use: !prevState.use
            }
        }) 
    }
    
    render() {
        return (
            <div className='niceDiv'>
              <Filter addFilter={this.filterHendler} filtr={this.state.use}/>
              <hr/>
              <ToDoList list={this.state.todos} handleChange={this.handleChange} showAll={this.state.use}/>
              <hr/>
              <NewTask addTaskHendler={this.addTaskHendler}/>
            </div>
        )    
    }
}

export default App