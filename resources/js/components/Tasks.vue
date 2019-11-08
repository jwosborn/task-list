<template>
  <div
    class="task-list-wrapper"
    :style="{
        'background-image': 'url(' + image + ')',
      }"
  >
    <div class="new-task task-column-wrapper">
      <h3>Add a New Task</h3>
      <input type="text" id="task-input" @keyup.enter="addTask(input,daily)" v-model="input" />
      <div class="complete add-button" @click="addTask(input, daily)">ADD</div>
    </div>

    <div class="task-column-wrapper">
      <h3>To-Do:</h3>
      <div :key="task.id" v-for="task in tasks">
        <div class="task" v-if="!task.isDone">
          <div class="remove" @click="removeTask(task)">X</div>
          <div class="option" @dblclick="task.edit = 1" v-if="task.edit === 0">
            <p>{{ task.title }}</p>
          </div>
          <input
            v-if="task.edit === 1"
            v-model="task.title"
            @keyup.enter="updateTask(task)"
            v-on:blur="updateTask(task)"
          />
          <div class="complete" @click="toggleComplete(task)">DONE</div>
        </div>
      </div>
    </div>

    <div class="task-column-wrapper">
      <h3>Completed Tasks</h3>
      <div :key="task.id" v-for="task in tasks">
        <div class="task" v-if="task.isDone">
          <div class="remove" @click="removeTask(task)">X</div>
          <div class="option" @dblclick="task.edit = 1" v-if="task.edit === 0">
            <p>{{ task.title }}</p>
          </div>
          <input
            v-if="task.edit === 1"
            v-model="task.title"
            @keyup.enter="updateTask(task)"
            v-on:blur="updateTask(task)"
          />
          <div class="complete" @click="toggleComplete(task)">RESET</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "Tasks",
  props: {
    user: String
  },
  methods: {
    addTask() {
      axios
        .post("/tasks", {
          title: this.input,
          created_by: this.user
        })
        .then(res => ((this.tasks = res.data), (this.input = "")));
    },
    removeTask(task) {
      axios.delete(`/tasks/${task.id}`).then(res => (this.tasks = res.data));
    },
    toggleComplete(task) {
      axios
        .patch(`/task/${task.id}`, task)
        .then(res => (this.tasks = res.data));
    },
    updateTask(task) {
      axios
        .patch(`/tasks/${task.id}`, task)
        .then(res => (this.tasks = res.data));
    }
  },
  data: function() {
    return {
      input: "",
      image: require("@/../../public/jpg/light-wood.jpg"),
      error: "",
      tasks: []
    };
  },
  created() {
    axios
      .get("/tasks")
      .then(res => (this.tasks = res.data))
      .catch(e => console.log(e));
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 0 auto 0.75em;
  background: #a6958f;
  color: #f5f5f5;
  width: 25vw;
  height: 55px;
  border-radius: 5%;
  font-weight: bold;
}
.task-list-wrapper {
  display: flex;
  flex-direction: row;
  margin: 0 1em;
  background-position: top center;
  background-size: contain;
  background-color: #d9cdbf;
  background-blend-mode: darken;
}
.task {
  display: flex;
  flex-direction: column;
  margin: 5px auto;
  background-color: #f2e9e9;
  width: 150px;
  border-radius: 12%;
}
.option {
  margin: 0 auto;
  color: #261b18;
}
p {
  margin: 0.5em;
}
.task-column-wrapper {
  display: flex;
  flex-direction: column;
  margin: 1em;
  flex-grow: 1;
}
.complete {
  margin: 0.5em auto;
  margin-bottom: 0.5em;
  height: 1.5em;
  width: 50px;
  background-color: #261b18;
  color: white;
  cursor: pointer;
  border-radius: 15%;
  box-shadow: 1px 1px 1px #222222;
}
.new-task {
  order: 3;
}
#task-input {
  margin: 0.5em auto;
  border: 2px solid #d9c7c1;
  background: #f2e9e9;
  color: #261b18;
  height: 25px;
}
label {
  margin: 0 auto;
  margin-bottom: 0.25em;
  background: #f2e9e9;
  width: 45px;
}
.remove {
  color: white;
  height: 16px;
  width: 15px;
  font-size: 15px;
  font-weight: bold;
  background: #a6958f;
  margin-left: 134px;
  margin-top: 2px;
  cursor: pointer;
  border-radius: 50%;
}
.add-button {
  margin-top: 0.05em;
}

/* mobile media query */

@media (max-width: 1024px) {
  .task-list-wrapper {
    display: block;
  }
  .task-column-wrapper {
    width: 75vw;
    margin: 0.5em auto;
  }
  h3 {
    width: 65vw;
    margin: inherit auto;
    font-size: 3em;
    height: 75px;
    margin-top: 10px;
  }
  .new-task {
    order: 1;
  }
  #task-input {
    width: 35vw;
    height: 1.25em;
    font-size: 4em;
  }
  .task {
    width: 75vw;
    margin: 0.75em auto;
  }
  .remove {
    height: 30px;
    width: 32px;
    position: relative;
    top: 5px;
    left: 75%;
    font-size: 30px;
  }
  .complete {
    width: 25vw;
    height: 3em;
    margin-top: 0.5em;
    font-size: 1.75em;
  }
  p {
    font-size: 2em;
  }
}
</style>
