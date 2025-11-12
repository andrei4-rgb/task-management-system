import React, { useState } from "react";
import { createTask } from "../api";

export default function TaskForm({ onAdd }) {
  const [title, setTitle] = useState("");
  const [description, setDescription] = useState("");

  const submit = async e => {
    e.preventDefault();
    if (!title.trim()) return;
    const newTask = await createTask({ title, description, status: "pending" });
    if (onAdd) onAdd(newTask);
    setTitle("");
    setDescription("");
  };

  return (
    <form onSubmit={submit}>
      <input value={title} onChange={e=>setTitle(e.target.value)} placeholder="Title" required />
      <textarea value={description} onChange={e=>setDescription(e.target.value)} placeholder="Description" />
      <button type="submit">Add Task</button>
    </form>
  );
}
