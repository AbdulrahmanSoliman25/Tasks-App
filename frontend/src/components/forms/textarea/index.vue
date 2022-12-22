<template>
  <v-textarea
    dense
    filled
    rounded
    v-model="val"
    :label="label"
    :rules="[(v) => !!v || `${label} is required`]"
  ></v-textarea>
</template>

<script>
export default {
  name: "pro-textarea",
  props: {
    label: {
      type: String,
      default: "",
    },
    value: {
      type: String,
      default: "",
    }
  },
  computed: {
    val: {
      set(val) {
        this.$emit("input", val);
      },
      get() {
        return this.value;
      },
    },
  },
};
</script>
