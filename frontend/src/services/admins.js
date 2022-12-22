import axios from "@/network/axios";
import * as ep from "../endpoints/admins";

export default class {
  static async getAdmins() {
    return await axios.get(ep.base).then((res) => res.data.data);
  }
}
