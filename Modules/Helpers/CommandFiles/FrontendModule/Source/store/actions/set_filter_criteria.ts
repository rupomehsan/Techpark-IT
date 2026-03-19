import { mapActions, mapWritableState } from "pinia";
import { store } from "..";

async function set_filter_criteria(data = {}) {
    let data_store = store()
    
    // Filter out date parameters - they should be set directly on store.start_date and store.end_date
    const filteredData = {};
    for (const key in data) {
        if (key !== 'start_date' && key !== 'end_date') {
            filteredData[key] = data[key];
        }
    }
    
    data_store.filter_criteria = {
        ...data_store.filter_criteria,
        ...filteredData
    }
}

export default set_filter_criteria;
