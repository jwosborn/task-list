<template>
  <div>
    <h3>Daily Tasks</h3>
    <div :key="task" class="task-wrapper" v-for="task in dailyTasks">
      <div class="task" v-if="!task.isDone">
        <div class="option">{{ task.value }}</div>
        <div class="complete" @click="task.isDone = !task.isDone">DONE</div>
      </div>
    </div>
    <h3>Weekly Tasks</h3>
    <div :key="task" class="task-wrapper" v-for="task in weeklyTasks">
      <div class="task" v-if="!task.isDone">
        <div class="option">{{ task.value }}</div>
        <div class="complete" @click="task.isDone = !task.isDone">DONE</div>
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
      dailyTasks: [
        {
          name: "hebrew-reading",
          value: "5 Verses of Hebrew",
          isDone: false
        },
        {
          name: "various-reading",
          value: "15 Minutes of Various Reading",
          isDone: false
        },
        {
          name: "budget",
          value: "All Transactions in EveryDollar",
          isDone: false
        }
      ],
      weeklyTasks: [
        {
          name: "goetchius",
          value: "1 Chapter of Goetchius",
          isDone: false
        },
        {
          name: "convo",
          value: "1 Intentional Conversation",
          isDone: false
        },
        {
          name: "dev",
          value: "12 Hours of Software Development",
          isDone: false
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
  margin: 15px auto;
  background: #42b983;
  color: #f5f5f5;
  width: 50vw;
}
.task {
  display: flex;
  flex-direction: column;
  margin: auto;
  background-color: lightgray;
  width: 50vw;
}
.tasks {
  display: flex;
}
.complete {
  margin: auto;
  margin-bottom: 0.5em;
  height: 1e.25m;
  width: 50px;
  background-color: #2c3e50;
  color: white;
  cursor: pointer;
  border-radius: 15%;
  box-shadow: 1px 1px 1px #222222;
}
</style>
