<template>
  <div
    class="task-list-wrapper"
    :style="{
        'background-image': 'url(' + image + ')',
      }"
  >
    <div class="task-wrapper">
      <h3>Daily Tasks</h3>
      <div :key="task" v-for="task in tasks">
        <div class="task" v-if="!task.isDone && !task.weekly">
          <div class="remove" @click="removeTask(task)">X</div>
          <div class="option">{{ task.title }}</div>
          <div class="complete" @click="task.isDone = !task.isDone">DONE</div>
        </div>
      </div>
    </div>

    <div class="task-wrapper">
      <h3>Weekly Tasks</h3>
      <div :key="task" v-for="task in tasks">
        <div class="task" v-if="task.weekly && !task.isDone">
          <div class="remove" @click="removeTask(task)">X</div>
          <div class="option">{{ task.title }}</div>
          <div class="complete" @click="task.isDone = !task.isDone">DONE</div>
        </div>
      </div>
    </div>

    <div class="task-wrapper">
      <h3>Completed Daily Tasks</h3>
      <div :key="task" v-for="task in tasks">
        <div class="task" v-if="task.isDone && !task.weekly">
          <div class="remove" @click="removeTask(task)">X</div>
          <div class="option">{{ task.value }}</div>
          <div class="complete" @click="task.isDone = !task.isDone">DONE</div>
        </div>
      </div>
    </div>

    <div class="task-wrapper">
      <h3>Completed Weekly Tasks</h3>
      <div :key="task" v-for="task in tasks">
        <div class="task" v-if="task.isDone && task.weekly">
          <div class="remove" @click="removeTask(i)">X</div>
          <div class="option">{{ task.value }}</div>
          <div class="complete" @click="task.isDone = !task.isDone">DONE</div>
        </div>
      </div>
    </div>
    <div class="new-task task-wrapper">
      <h3>Add a New Task</h3>
      <input type="text" id="task-input" v-model="input" />
      <input type="checkbox" id="daily" v-model="daily" />
      <label for="daily">Daily</label>
      <div class="complete add-button" @click="addTask(input, daily)">ADD</div>
    </div>
    <div class="complete" @click="getTasks()">Get Tasks</div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "Tasks",
  methods: {
    addTask(input, daily) {
      this.tasks.push({
        name: input,
        value: input,
        isDone: false,
        weekly: !daily
      });
      this.input = "";
    },
    removeTask(i) {
      this.tasks.splice(this.tasks.indexOf(i), 1);
    },
    getTasks() {
      axios
        .get("/tasks")
        .then(res => (this.tasks = res.data))
        .catch(e => console.log(e));
    }
  },
  data() {
    return {
      tasks: [],
      input: "",
      daily: true,
      image: require("@/../../public/jpg/light-wood.jpg")
    };
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 0 auto 0.75em;
  background: #a6958f;
  color: #f5f5f5;
  width: 12vw;
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
.task-wrapper {
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
</style>
