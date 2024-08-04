import { Entry } from "@/types/Database";

interface Props {
    entries: {
        data: Entry[]
    }
}
export default function EntriesList(props: Props) {
    // console.log(props)
    const paginatedEntries = props.entries.data;
    return <main>
        <h1>Entries List</h1>
        {
            paginatedEntries.map((entry) => {
                return (
                    <div key={entry.id} className="flex flex-wrap py-7">
                        {
                            ['front', 'status', 'views'].map((column:keyof Entry) => {
                                return <span key={column} className="border-r-2 border-gray-300 px-4">{entry[column]}</span>
                            })
                        }
                    </div>
                )
            })
        }
    </main>
}