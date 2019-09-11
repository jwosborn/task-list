<template>
  <div class="task-list-wrapper">
    <div class="task-wrapper">
      <h3>Daily Tasks</h3>
      <div :key="task" v-for="task in tasks">
        <div class="task" v-if="!task.isDone && !task.weekly">
          <div class="option">{{ task.value }}</div>
          <div class="complete" @click="task.isDone = !task.isDone">DONE</div>
        </div>
      </div>
    </div>

    <div class="task-wrapper">
      <h3>Weekly Tasks</h3>
      <div :key="task" v-for="task in tasks">
        <div class="task" v-if="task.weekly && !task.isDone">
          <div class="option">{{ task.value }}</div>
          <div class="complete" @click="task.isDone = !task.isDone">DONE</div>
        </div>
      </div>
    </div>

    <div class="task-wrapper">
      <h3>Completed Daily Tasks</h3>
      <div :key="task" v-for="task in tasks">
        <div class="task" v-if="task.isDone && !task.weekly">
          <div class="option">{{ task.value }}</div>
          <div class="complete" @click="task.isDone = !task.isDone">DONE</div>
        </div>
      </div>
    </div>

    <div class="task-wrapper">
      <h3>Completed Weekly Tasks</h3>
      <div :key="task" v-for="task in tasks">
        <div class="task" v-if="task.isDone && task.weekly">
          <div class="option">{{ task.value }}</div>
          <div class="complete" @click="task.isDone = !task.isDone">DONE</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Tasks",
  props: {
    msg: String
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
      toDo: [],
      done: []
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
}
.task-list-wrapper {
  display: flex;
  flex-direction: row;
  margin: 0 1em;
}
.task {
  display: flex;
  flex-direction: column;
  margin: 5px auto;
  background-color: lightgray;
  width: 150px;
}
.task-wrapper {
  display: flex;
  flex-direction: column;
  margin: 1em;
  flex-grow: 1;
}
.complete {
  margin: auto;
  margin-top: 0.25em;
  margin-bottom: 0.5em;
  height: 1.5em;
  width: 50px;
  background-color: #2c3e50;
  color: white;
  cursor: pointer;
  border-radius: 15%;
  box-shadow: 1px 1px 1px #222222;
}
</style>
