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
          <div class="option">{{ task.value }}</div>
          <div class="complete" @click="task.isDone = !task.isDone">DONE</div>
          <div class="remove" @click="removeTask(task)">X</div>
        </div>
      </div>
    </div>

    <div class="task-wrapper">
      <h3>Weekly Tasks</h3>
      <div :key="task" v-for="task in tasks">
        <div class="task" v-if="task.weekly && !task.isDone">
          <div class="option">{{ task.value }}</div>
          <div class="complete" @click="task.isDone = !task.isDone">DONE</div>
          <div class="remove" @click="removeTask(task)">X</div>
        </div>
      </div>
    </div>

    <div class="task-wrapper">
      <h3>Completed Daily Tasks</h3>
      <div :key="task" v-for="task in tasks">
        <div class="task" v-if="task.isDone && !task.weekly">
          <div class="option">{{ task.value }}</div>
          <div class="complete" @click="task.isDone = !task.isDone">DONE</div>
          <div class="remove" @click="removeTask(task)">X</div>
        </div>
      </div>
    </div>

    <div class="task-wrapper">
      <h3>Completed Weekly Tasks</h3>
      <div :key="task" v-for="task in tasks">
        <div class="task" v-if="task.isDone && task.weekly">
          <div class="option">{{ task.value }}</div>
          <div class="complete" @click="task.isDone = !task.isDone">DONE</div>
          <div class="remove" @click="removeTask(i)">X</div>
        </div>
      </div>
    </div>
    <div class="new-task task-wrapper">
      <h3>Add a New Task</h3>
      <input type="text" v-model="input" />
      <input type="checkbox" id="daily" v-model="daily" />
      <label for="daily">Daily</label>
      <div class="complete add-button" @click="addTask(input, daily)">ADD</div>
    </div>
  </div>
</template>

<script>
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
    }
  },
  data() {
    return {
      tasks: [
        {
          name: "hebrew-reading",
          value: "5 Verses of Hebrew",
          isDone: false,
          weekly: false
        },
        {
          name: "various-reading",
          value: "15 Minutes of Various Reading",
          isDone: false,
          weekly: false
        },
        {
          name: "budget",
          value: "All Transactions in EveryDollar",
          isDone: false,
          weekly: false
        },
        {
          name: "goetchius",
          value: "1 Chapter of Goetchius",
          isDone: false,
          weekly: true
        },
        {
          name: "convo",
          value: "1 Intentional Conversation",
          isDone: false,
          weekly: true
        },
        {
          name: "dev",
          value: "12 Hours of Software Development",
          isDone: false,
          weekly: true
        }
      ],
      input: "",
      daily: true,
      image: require("@/../../public/jpg/lined-paper.jpg")
    };
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 0 auto 0.75em;
  background: #42b983;
  color: #f5f5f5;
  width: 12vw;
  height: 55px;
  border-radius: 5%;
}
.task-list-wrapper {
  display: flex;
  flex-direction: row;
  margin: 0 1em;
  background-position: top center;
  background-size: cover;
  background-repeat: no-repeat;
}
.task {
  display: flex;
  flex-direction: column;
  margin: 5px auto;
  background-color: lightgray;
  width: 150px;
  border-radius: 12%;
}
.option {
  margin: 7px auto;
}
.task-wrapper {
  display: flex;
  flex-direction: column;
  margin: 1em;
  flex-grow: 1;
}
.complete {
  margin: auto;
  margin-bottom: 0.5em;
  height: 1.5em;
  width: 50px;
  background-color: #2c3e50;
  color: white;
  cursor: pointer;
  border-radius: 15%;
  box-shadow: 1px 1px 1px #222222;
}
input {
  margin: 0.5em auto;
  box-shadow: 3px 3px black;
}
label {
  margin-bottom: 0.25em;
}
.remove {
  color: white;
  height: 20px;
  width: 20px;
  background: red;
  margin: 0 auto;
  cursor: pointer;
}
.add-button {
  margin-top: 0.05em;
}
</style>
