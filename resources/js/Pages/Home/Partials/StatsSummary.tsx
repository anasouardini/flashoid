interface Props {
    statsSummary: Record<string, number>
}
export default function StatsSummary(props: Props) {
    return (
        <>
            <h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Stats</h2>
            <div className="flex flex-wrap py-7">
                {
                    Object.entries(props.statsSummary).map((stat) => {
                        return (
                            <div key={stat[0]} className="mr-4 mb-4">
                                <h3>{stat[0]}</h3>
                                <span>{stat[1]}</span>
                            </div>
                        );
                    })
                }
            </div>
        </>
    );
}