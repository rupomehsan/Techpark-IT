import { mapActions, mapWritableState } from "pinia";
import { store } from "..";

async function clear_item (){
    let state = mapWritableState(store, [
        'item'
    ]);

    state.item.set({});
}

export default clear_item;
