
names = []
in_guest = False
for row in open("participants.dat"):
    srow = row.strip()

    if srow == "" or "*******" in srow:
        continue

    srow = srow.replace("\t", " ")

    if "------" in srow:
        in_guest = True
        continue


    if "@" not in srow:
        name = srow
        names.append(name)
        continue
    else:
        arow = srow.split()
        if in_guest:
            for i in range(len(arow)):
                if "@" in arow[i]:
                    idx = i
            name = " ".join(arow[:idx])
            if not srow.endswith(" y"):
                print("skip " + name)
            else:
                names.append(name)

        else:
            name = " ".join(arow[:-2])
            names.append(name)

names = [x.title() for x in names]
names = list(set(names))

names = sorted(names, key=lambda x:x.split()[-1])

print("<table>")
for i, name in enumerate(names):
    if i % 5 == 0:
        print("<tr>")
    print("<td>" + name)
print("</table>")


print(len(names))

        


