import {User} from "./user";
import {Endereco} from "./endereco";

export class Festa {
    id: string;
    user: User;
    valor_ingresso: number;
    endereco: Endereco;
    data: string;
    flag_particular: boolean;
}
