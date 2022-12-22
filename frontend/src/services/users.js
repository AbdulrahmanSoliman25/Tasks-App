import axios from "@/network/axios";
import * as ep from "../endpoints/users";

export default class {
  static async getUsers() {
    return await axios.get(ep.base).then((res) => res.data.data);
  }
}
