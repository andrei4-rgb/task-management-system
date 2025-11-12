import React, { useState } from "react";
import Navbar from "./components/Navbar";
import AddTask from "./components/AddTask";
import TaskList from "./components/TaskList";

function App() {
  const [tasks, setTasks] = useState([]);

  const addTask = (task) => {
    setTasks([...tasks, task]);
  };

  const deleteTask = (index) => {
    const newTasks = tasks.filter((_, i) => i !== index);
    setTasks(newTasks);
  };

  return (
    <div>
      <Navbar />
      <div className="container mt-4">
        <h2 className="text-center mb-4">Task Manager</h2>
        <AddTask addTask={addTask} />
        <TaskList tasks={tasks} deleteTask={deleteTask} />
      </div>
    </div>
  );
}

export default App;
  