import axios from "@/network/axios";
import * as ep from "../endpoints/tasks";

export default class {
  static async getTasks(page) {
    return await axios
      .get(ep.base.replace("num", page))
      .then((res) => res.data);
  }
  static async createtTask(payload) {
    return await axios.post(ep.base, payload).then((res) => res.data);
  }
}
